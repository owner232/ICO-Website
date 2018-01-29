QUnit.module('Algorithms - Graph');

QUnit.test("primitives.common.graph -  Closure based graph data structure.", function (assert) {
	var items = [
		{ from: 1, to: 2, weight: 1 },
		{ from: 1, to: 3, weight: 1 },
		{ from: 1, to: 5, weight: 2 },
		{ from: 2, to: 3, weight: 3 },
		{ from: 3, to: 4, weight: 1 },
		{ from: 3, to: 5, weight: 2 },
		{ from: 4, to: 5, weight: 1 }
	];

	var graph = primitives.common.graph();
	for (var index = 0; index < items.length; index += 1) {
		var item = items[index];
		graph.addEdge(item.from, item.to, item);
	}

	var tree = graph.getSpanningTree(items[0].from, function (edge1, edge2) {
		return edge1.weight - edge2.weight;
	})

	var children = [];
	tree.loopLevels(this, function (nodeid, node, level) {
		if (children[level] == null) {
			children[level] = { level: level, items: [] };
		}
		children[level].items.push({ id: nodeid, parent: tree.parentid(nodeid) });
	});
	var expectedChildren = [{ "level": 0, "items": [{ "id": "1", "parent": null }] }, { "level": 1, "items": [{ "id": "5", "parent": "1" }] }, { "level": 2, "items": [{ "id": "3", "parent": "5" }, { "id": "4", "parent": "5" }] }, { "level": 3, "items": [{ "id": "2", "parent": "3" }] }];
	assert.ok(JSON.stringify(children) == JSON.stringify(expectedChildren), "getSpanningTree function should return following tree: " + JSON.stringify(children));

	var sequence = graph.getGrowthSequence(function (edge) {
		return edge.weight;
	})
	var expectedsequence = ["3", "2", "1", "5", "4"];
	assert.ok(JSON.stringify(sequence) == JSON.stringify(expectedsequence), "getGrowthSequence function should return following tree: " + JSON.stringify(sequence));


	var items = [
		{ from: 'A', to: 'B' }, { from: 'A', to: 'C' }, { from: 'A', to: 'D' },
		{ from: 'B', to: 'E' },
		{ from: 'C', to: 'E', weight: 100 }, { from: 'C', to: 'D', weight: 100 },
		{ from: 'D', to: 'F', weight: 50 }, { from: 'D', to: 'J' },
		{ from: 'E', to: 'F', weight: 100 },
		{ from: 'J', to: 'D' }
	];

	var graph = primitives.common.graph();
	for (var index = 0; index < items.length; index += 1) {
		var item = items[index];
		graph.addEdge(item.from, item.to, item);
	}

	var expectedConnectionPath = ['J', 'D', 'C', 'E'];

	var connectionPath = graph.getShortestPath('E', 'J');

	assert.ok(expectedConnectionPath.join(',') == connectionPath.join(','), "Not weighted edges. Passed!");

	expectedConnectionPath = ['J', 'D', 'A', 'B', 'E'];

	connectionPath = graph.getShortestPath('E', 'J', function (edge, fromItem, toItem) {
		return edge.weight || 1;
	});

	assert.ok(expectedConnectionPath.join(',') == connectionPath.join(','), "Weighted edges. Passed!");

});