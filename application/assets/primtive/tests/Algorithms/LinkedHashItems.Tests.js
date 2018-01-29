QUnit.module('Algorithms - LinkedHashItems');

QUnit.test("primitives.common.LinkedHashItems -  Add and iterate items in linked hash items collection.", function (assert) {
	var items = [
		{ id: 1, name: 'A' },
		{ id: 2, name: 'B' },
		{ id: 3, name: 'C' },
		{ id: 4, name: 'D' },
		{ id: 5, name: 'E' },
		{ id: 6, name: 'F' }
	];

	var linkedHashItems = new primitives.common.LinkedHashItems();
	for (var index = 0; index < items.length; index++) {
		var item = items[index];
		linkedHashItems.add(item.id, item);
	};

	var result = [];
	linkedHashItems.iterate(function (item) {
		result.push(item);
	});
	assert.ok(primitives.common.compareArrays(items, result, function (item) {
		return item.id;
	}), "Forward iteration returned correct items!");

	var reversedResult = [],
		reversedItems = items.slice(0);
	reversedItems.reverse();

	linkedHashItems.iterateBack(function (item) {
		reversedResult.push(item);
	});
	assert.ok(primitives.common.compareArrays(reversedItems, reversedResult, function (item) {
		return item.id;
	}), "Back iteration returned correct items!");

	linkedHashItems.remove(3);
	items.splice(2, 1);
	assert.ok(primitives.common.compareArrays(items, linkedHashItems.toArray(), function (item) {
		return item.id;
	}), "Removed item. Passed!");

	linkedHashItems.remove(1);
	items.splice(0, 1);
	assert.ok(primitives.common.compareArrays(items, linkedHashItems.toArray(), function (item) {
		return item.id;
	}), "Remove first item. Passed!");

	linkedHashItems.remove(6);
	items.splice(3, 1);
	assert.ok(primitives.common.compareArrays(items, linkedHashItems.toArray(), function (item) {
		return item.id;
	}), "Remove last item. Passed!");

	linkedHashItems.empty();
	assert.ok(primitives.common.compareArrays([], linkedHashItems.toArray(), function (item) {
		return item.id;
	}), "Remove all items. Passed!");
});