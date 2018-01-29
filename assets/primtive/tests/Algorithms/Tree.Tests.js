QUnit.module('Algorithms - Tree');

QUnit.test("primitives.common.tree -  Closure based tree data structure.", function (assert) {
	var items = [
		{ id: 0, parent: null, name: "0" },
		{ id: 1, parent: 0, name: "1" },
		{ id: 2, parent: 1, name: "2" },
		{ id: 3, parent: 1, name: "3" },
		{ id: 4, parent: 0, name: "4" },
		{ id: 5, parent: 4, name: "5" },
		{ id: 6, parent: 4, name: "6" },
		{ id: 7, parent: 6, name: "6" },
		{ id: 8, parent: 7, name: "8" },
		{ id: 9, parent: 3, name: "9" },
		{ id: 10, parent: 9, name: "10" }
	];

	var tree = primitives.common.tree();
	assert.ok(tree.hasNodes() == false, "hasNodes returns false for empty tree.");

	for (var index = 0; index < items.length; index += 1) {
		var item = items[index];
		tree.add(item.parent, item.id, item);
	}

	assert.ok(tree.hasNodes() == true, "hasNodes returns true for non-empty tree.");

	var postOrderSequence = [];
	tree.loopPostOrder(this, function (nodeid, node, parentid, parent) {
		postOrderSequence.push(nodeid);
	});
	var expectedChildren = [2, 10, 9, 3, 1, 5, 8, 7, 6, 4, 0];
	assert.ok(JSON.stringify(postOrderSequence) == JSON.stringify(expectedChildren), "Post order sequence: " + JSON.stringify(postOrderSequence));

	var preOrderSequence = [];
	tree.loopPreOrder(this, function (nodeid, node) {
		preOrderSequence.push(nodeid);
	});
	var expectedChildren = [0, 1, 2, 3, 9, 10, 4, 5, 6, 7, 8];
	assert.ok(JSON.stringify(preOrderSequence) == JSON.stringify(expectedChildren), "Pre order sequence: " + JSON.stringify(preOrderSequence));

	var pairs = [];
	tree.zipUp(this, 8, 10, function (firstNodeId, firstParentId, secondNodeid, secondParentId) {
		pairs.push([firstNodeId, secondNodeid]);
	});
	var expectedPairs = [[8, 10], [7, 9], [6, 3], [4, 1]];
	assert.ok(JSON.stringify(pairs) == JSON.stringify(expectedPairs), "Function zipUp should return pairs of parent items up to the root including initial items: " + JSON.stringify(expectedPairs));


	var parents = [];
	tree.loopParents(this, 8, function (parentid, parent) {
		parents.push(parentid);
	});

	var expectedItems = [7, 6, 4, 0];
	assert.ok(JSON.stringify(parents) == JSON.stringify(expectedItems), "Function loopParents should return parent items up to the root: " + JSON.stringify(expectedItems));

	var rootItems = [];
	tree.loopLevels(this, function (nodeid, node, levelid) {
		if (levelid > 0) {
			return tree.BREAK;
		}
		rootItems.push(nodeid);
	});
	assert.ok(JSON.stringify(rootItems) == JSON.stringify([0]), "Function loopLevels should break loop on BREAK.");

	var levels = [];
	tree.loopLevels(this, function (nodeid, node, levelid) {
		if (levels[levelid] == null) {
			levels[levelid] = [nodeid];
		} else {
			levels[levelid].push(nodeid);
		}
	});

	var expectedLevels = [[0], [1, 4], [2, 3, 5, 6], [9, 7], [10, 8]];
	assert.ok(JSON.stringify(levels) == JSON.stringify(expectedLevels), "Function loopLevels should return 5 levels: " + JSON.stringify(expectedLevels));

	assert.ok(tree.parent(0) == null, "Parent of 0 item is null.");
	assert.ok(tree.node(100) == null, "Node 100 does not exists.");
	assert.ok(tree.parent(6).id == 4, "Parent of item 6 is 4.");


	var children = [];
	tree.loopChildren(this, 4, function (nodeid, node) {
		children.push(nodeid);
	});
	assert.ok(JSON.stringify(children) == JSON.stringify([5, 6]), "Function loopChildren for item 4 should return:" + JSON.stringify([5, 6]));

	tree.adopt(3, 10);
	var children = [];
	tree.loopChildren(this, 3, function (nodeid, node) {
		children.push(nodeid);
	});
	var expectedChildren = [9, 10];
	assert.ok(JSON.stringify(children) == JSON.stringify(expectedChildren), "Item 3 should contain adopted item 10: " + JSON.stringify(expectedChildren));

	var children = [];
	tree.loopChildren(this, 9, function (nodeid, node) {
		children.push(nodeid);
	});
	var expectedChildren = [];
	assert.ok(JSON.stringify(children) == JSON.stringify(expectedChildren), "Item 9 should have no children: " + JSON.stringify(expectedChildren));

	var items = [
		{ id: 1, name: "1" },
		{ id: 2, name: "2" },
		{ id: 3, name: "3" },
		{ id: 4, parent: 100, name: "4" },
		{ id: 5, parent: 101, name: "5" },
		{ id: 6, parent: 102, name: "6" },
		{ id: 7, parent: 4, name: "7" },
		{ id: 8, parent: 5, name: "8" },
		{ id: 9, parent: 6, name: "9" },
		{ id: 10, parent: 7, name: "10" },
		{ id: 11, parent: 8, name: "11" },
		{ id: 12, parent: 9, name: "12" }
	];

	var tree2 = primitives.common.tree();
	for (var index = 0; index < items.length; index += 1) {
		var item = items[index];
		tree2.add(item.parent, item.id, item);
	}

	var nodes = [];
	tree2.loopLevels(this, function (nodeid, node, levelIndex) {
		if (nodeid != 1) {
			nodes.push(nodeid);
		}
	});

	for (var index = 0; index < nodes.length; index += 1) {
		var itemid = nodes[index];
		tree2.adopt(1, itemid);
	}

	var children = [];
	tree2.loopChildren(this, 1, function (nodeid, node) {
		children.push(nodeid);
	});
	var expectedChildren = [4, 5, 6, 2, 3, 7, 8, 9, 10, 11, 12];
	assert.ok(JSON.stringify(children) == JSON.stringify(expectedChildren), "Item 1 should have adopted all children: " + JSON.stringify(children));

	var children = [];
	tree2.loopChildrenRange(this, 1, 3, 8, function (nodeid, node) {
		children.push(nodeid);
	});
	var expectedChildren = [2, 3, 7, 8, 9, 10];
	assert.ok(JSON.stringify(children) == JSON.stringify(expectedChildren), "Item 1 children in range from 3 to 8 should have following children: " + JSON.stringify(children));

	var children = [];
	tree2.loopChildrenRange(this, 1, 8, 3, function (nodeid, node) {
		children.push(nodeid);
	});
	var expectedChildren = [10, 9, 8, 7, 3, 2];
	assert.ok(JSON.stringify(children) == JSON.stringify(expectedChildren), "Item 1 children in range from 8 to 3 should have following children: " + JSON.stringify(children));

	var children = [];
	tree2.loopChildrenRange(this, 1, 8, 100, function (nodeid, node) {
		children.push(nodeid);
	});
	var expectedChildren = [10, 11, 12];
	assert.ok(JSON.stringify(children) == JSON.stringify(expectedChildren), "Item 1 children in range from 8 to 100 should have following children: " + JSON.stringify(children));

	var children = [];
	tree2.loopChildrenRange(this, 1, 3, -1, function (nodeid, node) {
		children.push(nodeid);
	});
	var expectedChildren = [2, 6, 5, 4];
	assert.ok(JSON.stringify(children) == JSON.stringify(expectedChildren), "Item 1 children in range from 3 to -1 should have following children: " + JSON.stringify(children));

	var children = [];
	tree2.loopChildrenReversed(this, 1, function (nodeid, node) {
		children.push(nodeid);
	});
	var expectedChildren = [12, 11, 10, 9, 8, 7, 3, 2, 6, 5, 4];
	assert.ok(JSON.stringify(children) == JSON.stringify(expectedChildren), "Reversed children of item 1: " + JSON.stringify(children));

	var items = [
		{ id: 1 },
		{ id: 2, parent: 1 },
		{ id: 3, parent: 1 },
		{ id: 4, parent: 1 }
	];

	var tree = primitives.common.tree();
	for (var index = 0; index < items.length; index += 1) {
		var item = items[index];
		tree.add(item.parent, item.id, item);
	}

	assert.ok(tree.getChild(1, 0).id == 2, "getChild returns node 2 for parent 1 at 0 position.");
	assert.ok(tree.getChild(1, 2).id == 4, "getChild returns node 4 for parent 1 at 2 position.");
	assert.ok(tree.getChild(1, 3) == null, "getChild returns null child for parent 1 at 3 position.");

	tree.insert(1, 100, {});
	tree.insert(4, 400, {});

	var children = [];
	tree.loopLevels(this, function (nodeid, node, level) {
		if (children[level] == null) {
			children[level] = { level: level, items: [] };
		}
		children[level].items.push({ id: nodeid, parent: tree.parentid(nodeid) });
	});
	var expectedChildren = [{ "level": 0, "items": [{ "id": 1, "parent": null }] },
		{ "level": 1, "items": [{ "id": 100, "parent": 1 }] },
		{ "level": 2, "items": [{ "id": 2, "parent": 100 }, { "id": 3, "parent": 100 }, { "id": 4, "parent": 100 }] },
		{ "level": 3, "items": [{ "id": 400, "parent": 4 }] }
	];
	assert.ok(JSON.stringify(children) == JSON.stringify(expectedChildren), "insert function should change tree to the following 3 level structure: " + JSON.stringify(children));

	var items = [
		{ id: 1 },
		{ id: 10 },
		{ id: 2, parent: 1 },
		{ id: 3, parent: 1 },
		{ id: 4, parent: 1 },
		{ id: 11, parent: 10 },
		{ id: 12, parent: 10 }
	];

	var tree = primitives.common.tree();
	for (var index = 0; index < items.length; index += 1) {
		var item = items[index];
		tree.add(item.parent, item.id, item);
	}

	tree.moveChildren(1, 10);

	var children = [];
	tree.loopLevels(this, function (nodeid, node, level) {
		if (children[level] == null) {
			children[level] = { level: level, items: [] };
		}
		children[level].items.push({ id: nodeid, parent: tree.parentid(nodeid) });
	});
	var expectedChildren = [{ "level": 0, "items": [{ "id": 1, "parent": null }, { "id": 10, "parent": null }] },
		{ "level": 1, "items": [{ "id": 11, "parent": 10 }, { "id": 12, "parent": 10 }, { "id": 2, "parent": 10 }, { "id": 3, "parent": 10 }, { "id": 4, "parent": 10 }] }
	];
	assert.ok(JSON.stringify(children) == JSON.stringify(expectedChildren), "insert function should change tree to the following 3 level structure: " + JSON.stringify(children));
});
