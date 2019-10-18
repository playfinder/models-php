<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class Review extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * The rating given in this review. Note that reviews can themselves be rated. The <code>reviewRating</code> applies to rating given by the review. The <a class="localLink" href="https://schema.org/aggregateRating">aggregateRating</a> property applies to the review itself, as a creative work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Rating
     */
    protected $reviewRating;

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     *
     *
     * @var string
     */
    protected $reviewAspect;

    /**
     * The item that is being reviewed/rated.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $itemReviewed;

    /**
     * The actual body of the review.
     *
     *
     * @var string
     */
    protected $reviewBody;

    /**
     * @return \OpenActive\Models\SchemaOrg\Rating
     */
    public function getReviewRating()
    {
        return $this->reviewRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Rating $reviewRating
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setReviewRating($reviewRating)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Rating",
        );

        $reviewRating = self::checkTypes($reviewRating, $types);

        $this->reviewRating = $reviewRating;
    }

    /**
     * @return string
     */
    public function getReviewAspect()
    {
        return $this->reviewAspect;
    }

    /**
     * @param string $reviewAspect
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setReviewAspect($reviewAspect)
    {
        $types = array(
            "string",
        );

        $reviewAspect = self::checkTypes($reviewAspect, $types);

        $this->reviewAspect = $reviewAspect;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getItemReviewed()
    {
        return $this->itemReviewed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $itemReviewed
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setItemReviewed($itemReviewed)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $itemReviewed = self::checkTypes($itemReviewed, $types);

        $this->itemReviewed = $itemReviewed;
    }

    /**
     * @return string
     */
    public function getReviewBody()
    {
        return $this->reviewBody;
    }

    /**
     * @param string $reviewBody
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setReviewBody($reviewBody)
    {
        $types = array(
            "string",
        );

        $reviewBody = self::checkTypes($reviewBody, $types);

        $this->reviewBody = $reviewBody;
    }

}
