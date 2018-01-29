QUnit.module('Algorithms - Perimeter');

QUnit.test("primitives.common.perimeter.Manager - Add perimeters and get merged results.", function (assert) {
	var points = [
		new primitives.common.Point(0, 0),
		new primitives.common.Point(10, 0),
		new primitives.common.Point(20, 0),
		new primitives.common.Point(0, 10),
		new primitives.common.Point(10, 10),
		new primitives.common.Point(20, 10),
		new primitives.common.Point(0, 20),
		new primitives.common.Point(10, 20),
		new primitives.common.Point(20, 20)
	];
	var perimeters = [
		new primitives.common.perimeter.Item(1, [
			new primitives.common.perimeter.SegmentItem(points[0], points[3]),
			new primitives.common.perimeter.SegmentItem(points[3], points[4]),
			new primitives.common.perimeter.SegmentItem(points[4], points[1]),
			new primitives.common.perimeter.SegmentItem(points[1], points[0])
		]),
		new primitives.common.perimeter.Item(2, [
			new primitives.common.perimeter.SegmentItem(points[1], points[4]),
			new primitives.common.perimeter.SegmentItem(points[4], points[5]),
			new primitives.common.perimeter.SegmentItem(points[5], points[2]),
			new primitives.common.perimeter.SegmentItem(points[2], points[1])
		]),
		new primitives.common.perimeter.Item(3, [
			new primitives.common.perimeter.SegmentItem(points[4], points[3]),
			new primitives.common.perimeter.SegmentItem(points[3], points[6]),
			new primitives.common.perimeter.SegmentItem(points[6], points[7]),
			new primitives.common.perimeter.SegmentItem(points[7], points[4])
		]),
		new primitives.common.perimeter.Item(4, [
			new primitives.common.perimeter.SegmentItem(points[8], points[5]),
			new primitives.common.perimeter.SegmentItem(points[5], points[4]),
			new primitives.common.perimeter.SegmentItem(points[4], points[7]),
			new primitives.common.perimeter.SegmentItem(points[7], points[8])
		])
	];

	var expectedResult = new primitives.common.perimeter.Item(1, [
			new primitives.common.perimeter.SegmentItem(points[0], points[3]),
			new primitives.common.perimeter.SegmentItem(points[3], points[6]),
			new primitives.common.perimeter.SegmentItem(points[6], points[7]),
			new primitives.common.perimeter.SegmentItem(points[7], points[8]),
			new primitives.common.perimeter.SegmentItem(points[8], points[5]),
			new primitives.common.perimeter.SegmentItem(points[5], points[2]),
			new primitives.common.perimeter.SegmentItem(points[2], points[1]),
			new primitives.common.perimeter.SegmentItem(points[1], points[0])
	]);

	var manager = new primitives.common.perimeter.Manager(perimeters);

	var results = manager.getMergedPerimeters([1, 2, 3, 4]);

	var validationResult = { message: "" };
	assert.ok(results[0].segments.validate(validationResult), "Structure passed validation. " + validationResult.message);

	assert.ok(results.length == 1 && primitives.common.compareArrays(expectedResult.segments.toArray(), results[0].segments.toArray(), function (item) {
		return item.key;
	}), "Manager merged 4 square perimeters into one as expected. Passed!");

	var perimeters2 = [
		new primitives.common.perimeter.Item(1, [
			new primitives.common.perimeter.SegmentItem(points[0], points[3]),
			new primitives.common.perimeter.SegmentItem(points[3], points[6]),
			new primitives.common.perimeter.SegmentItem(points[6], points[7]),
			new primitives.common.perimeter.SegmentItem(points[7], points[4]),
			new primitives.common.perimeter.SegmentItem(points[4], points[1]),
			new primitives.common.perimeter.SegmentItem(points[1], points[0])
		]),
		new primitives.common.perimeter.Item(2, [
			new primitives.common.perimeter.SegmentItem(points[1], points[4]),
			new primitives.common.perimeter.SegmentItem(points[4], points[7]),
			new primitives.common.perimeter.SegmentItem(points[7], points[8]),
			new primitives.common.perimeter.SegmentItem(points[8], points[5]),
			new primitives.common.perimeter.SegmentItem(points[5], points[2]),
			new primitives.common.perimeter.SegmentItem(points[2], points[1])
		])
	];

	var expectedResult2 = new primitives.common.perimeter.Item(1, [
			new primitives.common.perimeter.SegmentItem(points[0], points[3]),
			new primitives.common.perimeter.SegmentItem(points[3], points[6]),
			new primitives.common.perimeter.SegmentItem(points[6], points[7]),
			new primitives.common.perimeter.SegmentItem(points[7], points[8]),
			new primitives.common.perimeter.SegmentItem(points[8], points[5]),
			new primitives.common.perimeter.SegmentItem(points[5], points[2]),
			new primitives.common.perimeter.SegmentItem(points[2], points[1]),
			new primitives.common.perimeter.SegmentItem(points[1], points[0])
	]);

	var manager2 = new primitives.common.perimeter.Manager(perimeters2);

	var results2 = manager2.getMergedPerimeters([1, 2]);


	var validationResult = { message: "" };
	assert.ok(results2[0].segments.validate(validationResult), "Structure passed validation. " + validationResult.message);

	assert.ok(results.length == 1 && primitives.common.compareArrays(expectedResult2.segments.toArray(), results2[0].segments.toArray(), function (item) {
		return item.key;
	}), "Manager merged rectangular perimeters into one as expected. Passed!");
});
