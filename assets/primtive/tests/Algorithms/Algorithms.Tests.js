QUnit.module('Algorithms - Functions');

QUnit.test("primitives.common.mergeSort", function (assert) {
	var arrays = [
		[1, 5, 9, 13, 17],
		[0, 2, 4, 6, 8, 10],
		[3, 7, 11],
		[],
		[18, 19, 20]
	];

	var result = primitives.common.mergeSort(arrays);

	var expectedResult = [];
	for (var index = 0; index < arrays.length; index += 1) {
		var array1 = arrays[index];

		expectedResult = expectedResult.concat(array1);
	}
	expectedResult.sort(function (a, b) {
		return a - b;
	});

	assert.ok(result.join(',') == expectedResult.join(','), "Merged sort multiple arrays!");

	arrays = [
		[1, 1, 5, 9, 9, 13, 17, 17],
		[0, 0, 2, 4, 6, 6, 8, 10]
	];

	result = primitives.common.mergeSort(arrays, null, true);

	expectedResult = [0, 1, 2, 4, 5, 6, 8, 9, 10, 13, 17];

	assert.ok(result.join(',') == expectedResult.join(','), "Merged sort multiple arrays ignoring duplicates!");

	arrays = [
		[1, 5, 9, 13, 17],
	];

	var result = primitives.common.mergeSort(arrays);

	var expectedResult = [];
	for (var index = 0; index < arrays.length; index += 1) {
		var array1 = arrays[index];

		expectedResult = expectedResult.concat(array1);
	}
	expectedResult.sort(function (a, b) {
		return a - b;
	});

	assert.ok(result.join(',') == expectedResult.join(','), "Merged sort single array!");

	arrays = [
		[1, 1, 5, 9, 9, 9, 13, 17, 17, 18, 18, 18, 18]
	];

	result = primitives.common.mergeSort(arrays, null, true);

	expectedResult = [1, 5, 9, 13, 17, 18];

	assert.ok(result.join(',') == expectedResult.join(','), "Merged sort single array ignoring duplicates!");

	arrays = [
		[{ weight: 1 }, { weight: 5 }, { weight: 9 }, { weight: 13 }, { weight: 17 }],
		[{ weight: 2 }, { weight: 4 }, { weight: 6 }, { weight: 8 }, { weight: 10 }],
		[{ weight: 3 }, { weight: 7 }, { weight: 11 }],
		[],
		[{ weight: 18 }, { weight: 19 }, { weight: 20 }]
	];

	var result = primitives.common.mergeSort(arrays, function (item) { return item.weight; });

	var expectedResult = [];
	for (var index = 0; index < arrays.length; index += 1) {
		var array1 = arrays[index];

		expectedResult = expectedResult.concat(array1);
	}
	expectedResult.sort(function (a, b) {
		return a.weight - b.weight;
	});

	assert.ok(jQuery.map(result, function (item) { return item.weight; }).join(',') == jQuery.map(expectedResult, function (item) { return item.weight; }).join(','), "Merged sort multiple arrays of objects!");
});

QUnit.test("primitives.common.binarySearch -  Search sorted list of elements for nearest item.", function (assert) {
	var items = [
		new primitives.common.Point(10, 10),
		new primitives.common.Point(15, 10),
		new primitives.common.Point(16, 10),
		new primitives.common.Point(20, 10),
		new primitives.common.Point(50, 10),
		new primitives.common.Point(100, 10),
		new primitives.common.Point(140, 10)
	];

	var item = primitives.common.binarySearch(items, function (item, offset) {
		return item.x - 4;
	});

	assert.ok(item.x = 10, "Function should return leftmost item.");

	item = primitives.common.binarySearch(items, function (item, offset) {
		return item.x - 200;
	});

	assert.ok(item.x = 140, "Function should return rightmost  item.");

	item = primitives.common.binarySearch(items, function (item, offset) {
		return item.x - 60;
	});

	assert.ok(item.x = 50, "Function should return item having x equal 50.");

	item = primitives.common.binarySearch(items, function (item, offset) {
		return item.x - 90;
	});

	assert.ok(item.x = 100, "Function should return item having x equal 100.");
});