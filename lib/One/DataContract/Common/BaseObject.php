<?php

namespace Gateway\One\DataContract\Common;

abstract class BaseObject
{
    public function getData()
    {
        $properties = get_object_vars($this);

        foreach ($properties as $propertieName => &$propertie) {
            if (is_array($propertie)) {
                foreach ($propertie as &$collectionItem) {
                    if ($collectionItem instanceof BaseObject) {
                        $collectionItem = $collectionItem->getData();
                    }
                }
            }
            elseif ($propertie instanceof BaseObject) {
                $propertie = $propertie->getData();
            }

            if (is_null($propertie)) {
                unset($properties[$propertieName]);
            }
        }

        return $properties;
    }
}