<?php

namespace CdmFr\Model;

use JMS\Serializer\XmlSerializationVisitor;
use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\VisitorInterface;
use JMS\Serializer\Context;

/**
 * https://github.com/goetas/xsd2php
 *
 * @author Joachim Dornbusch
 *        
 */
class AnyTypeHandler implements SubscribingHandlerInterface {
	public static function getSubscribingMethods() {
		return array (
				array (
						'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
						'format' => 'xml',
						'type' => 'CdmFr/Model/AnyTypeHandler',
						'method' => 'deserializeAnyType' 
				),
				array (
						'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
						'format' => 'xml',
						'type' => 'CdmFr/Model/AnyTypeHandler',
						'method' => 'serializeAnyType' 
				) 
		);
	}
	public function serializeAnyType(XmlSerializationVisitor $visitor, $data, array $type, Context $context) {
		return $visitor->visitNull ( $data, $type, $context );
	}
	public function deserializeAnyType(XmlDeserializationVisitor $visitor, $data, array $type) {
		return $visitor->visitNull ( $data, $type, $context );
	}
}