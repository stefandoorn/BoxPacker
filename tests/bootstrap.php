<?php
  /**
   * Box packing (3D bin packing, knapsack problem)
   * @package BoxPacker
   * @author Doug Wright
   */

  namespace DVDoug\BoxPacker;

  class TestBox implements Box {

    public function __construct($aReference, $aOuterWidth,$aOuterLength,$aOuterDepth,$aEmptyWeight,$aInnerWidth,$aInnerLength,$aInnerDepth,$aMaxWeight) {
      $this->reference = $aReference;
      $this->outerWidth = $aOuterWidth;
      $this->outerLength = $aOuterLength;
      $this->outerDepth = $aOuterDepth;
      $this->emptyWeight = $aEmptyWeight;
      $this->innerWidth = $aInnerWidth;
      $this->innerLength = $aInnerLength;
      $this->innerDepth = $aInnerDepth;
      $this->maxWeight = $aMaxWeight;
      $this->innerVolume = $this->innerWidth * $this->innerLength * $this->innerDepth;
    }

    public function getReference() {
      return $this->reference;
    }

    public function getOuterWidth() {
      return $this->outerWidth;
    }

    public function getOuterLength() {
      return $this->outerLength;
    }

    public function getOuterDepth() {
      return $this->outerDepth;
    }

    public function getEmptyWeight() {
      return $this->emptyWeight;
    }

    public function getInnerWidth() {
      return $this->innerWidth;
    }

    public function getInnerLength() {
      return $this->innerLength;
    }

    public function getInnerDepth() {
      return $this->innerDepth;
    }

    public function getInnerVolume() {
      return $this->innerVolume;
    }

    public function getMaxWeight() {
      return $this->maxWeight;
    }

    /**
     * @param mixed $emptyWeight
     */
    public function setEmptyWeight($emptyWeight) {
      $this->emptyWeight = $emptyWeight;
    }

    /**
     * @param mixed $innerDepth
     */
    public function setInnerDepth($innerDepth) {
      $this->innerDepth = $innerDepth;
    }

    /**
     * @param mixed $innerLength
     */
    public function setInnerLength($innerLength) {
      $this->innerLength = $innerLength;
    }

    /**
     * @param mixed $innerVolume
     */
    public function setInnerVolume($innerVolume) {
      $this->innerVolume = $innerVolume;
    }

    /**
     * @param mixed $innerWidth
     */
    public function setInnerWidth($innerWidth) {
      $this->innerWidth = $innerWidth;
    }

    /**
     * @param mixed $maxWeight
     */
    public function setMaxWeight($maxWeight) {
      $this->maxWeight = $maxWeight;
    }

    /**
     * @param mixed $outerDepth
     */
    public function setOuterDepth($outerDepth) {
      $this->outerDepth = $outerDepth;
    }

    /**
     * @param mixed $outerLength
     */
    public function setOuterLength($outerLength) {
      $this->outerLength = $outerLength;
    }

    /**
     * @param mixed $outerWidth
     */
    public function setOuterWidth($outerWidth) {
      $this->outerWidth = $outerWidth;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference) {
      $this->reference = $reference;
    }



  }

  class TestItem implements Item {

    public function __construct($aDescription,$aWidth,$aLength,$aDepth,$aWeight) {
      $this->description = $aDescription;
      $this->width = $aWidth;
      $this->length = $aLength;
      $this->depth = $aDepth;
      $this->weight = $aWeight;
      $this->volume = $this->width * $this->length * $this->depth;
    }

    public function getDescription() {
      return $this->description;
    }

    public function getWidth() {
      return $this->width;
    }

    public function getLength() {
      return $this->length;
    }

    public function getDepth() {
      return $this->depth;
    }

    public function getWeight() {
      return $this->weight;
    }

    public function getVolume() {
      return $this->volume;
    }

    /**
     * @param mixed $depth
     */
    public function setDepth($depth) {
      $this->depth = $depth;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description) {
      $this->description = $description;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length) {
      $this->length = $length;
    }

    /**
     * @param mixed $volume
     */
    public function setVolume($volume) {
      $this->volume = $volume;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight) {
      $this->weight = $weight;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width) {
      $this->width = $width;
    }


 }

