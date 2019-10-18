<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [PropertyValue](https://schema.org/PropertyValue), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class PropertyValue extends \OpenActive\Models\SchemaOrg\PropertyValue
{
    /**
     * The name of this PropertyValue
     *
     * ```json
     * "name": "Vendor ID"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * Additional human-readable version of the value of the property.
     *
     *
     * @var string
     */
    protected $description;

    /**
     * A commonly used identifier for the characteristic represented by the property
     *
     * ```json
     * "propertyID": "ActivePlaces"
     * ```
     *
     * @var string
     */
    protected $propertyID;

    /**
     * The actual value of this identifier
     *
     * ```json
     * "value": "SB1234"
     * ```
     *
     * @var int|string|null
     */
    protected $value;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = array(
            "string",
        );

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDescription($description)
    {
        $types = array(
            "string",
        );

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getPropertyID()
    {
        return $this->propertyID;
    }

    /**
     * @param string $propertyID
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPropertyID($propertyID)
    {
        $types = array(
            "string",
        );

        $propertyID = self::checkTypes($propertyID, $types);

        $this->propertyID = $propertyID;
    }

    /**
     * @return int|string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int|string|null $value
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setValue($value)
    {
        $types = array(
            "int",
            "string",
            "null",
        );

        $value = self::checkTypes($value, $types);

        $this->value = $value;
    }

}
