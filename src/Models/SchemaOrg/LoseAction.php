<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class LoseAction extends \OpenActive\Models\SchemaOrg\AchieveAction
{
    /**
     * A sub property of participant. The winner of the action.
     *
     *
     * @var Person
     */
    protected $winner;

    /**
     * @return Person
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * @param Person $winner
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setWinner($winner)
    {
        $types = array(
            "Person",
        );

        $winner = self::checkTypes($winner, $types);

        $this->winner = $winner;
    }

}
