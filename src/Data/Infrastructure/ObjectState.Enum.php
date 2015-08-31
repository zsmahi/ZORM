<?php
namespace ZORM\Data\Infrastrcture;
/**
 *
 * Enum ObjectState, this enum is the enumeration of the different object states of an entity
 *
*/
abstract class ObjectStateEnum{
    const Unchanged = 0;
    const Added = 1;
    const Modified = 2;
    const Deleted = -1;
}
?>