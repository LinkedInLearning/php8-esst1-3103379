<?php
/**
 * Calculate the area of a rectangle.
 *
 * This function takes the width and length of a rectangle as input
 * and returns the calculated area.
 *
 * @param float|int $width  The width of the rectangle.
 * @param float|int $length The length of the rectangle.
 * @return float|int The area of the rectangle.
 */
function calculateRectangleArea($width, $length) {
	$area = $width * $length;
	return $area;
}