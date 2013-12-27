<?php
namespace google\protobuf;

// @@protoc_insertion_point(namespace:google.protobuf.FieldDescriptorProto)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: google/protobuf/descriptor.proto
 *
 * -*- magic methods -*-
 *
 * @method string getName()
 * @method void setName()
 * @method string getNumber()
 * @method void setNumber()
 * @method int getLabel()
 * @method void setLabel()
 * @method int getType()
 * @method void setType()
 * @method string getTypeName()
 * @method void setTypeName()
 * @method string getExtendee()
 * @method void setExtendee()
 * @method string getDefaultValue()
 * @method void setDefaultValue()
 * @method \google\protobuf\FieldOptions getOptions()
 * @method void setOptions()
 *
 */
class FieldDescriptorProto extends \ProtocolBuffers\Message
{
  // @@protoc_insertion_point(traits:google.protobuf.FieldDescriptorProto)

  /** @var string $name tag:1  optional \ProtocolBuffers::TYPE_STRING */
  protected $name;

  /** @var string $number tag:3  optional \ProtocolBuffers::TYPE_INT32 */
  protected $number;

  /** @var int $label tag:4  optional \ProtocolBuffers::TYPE_ENUM */
  protected $label;

  /** @var int $type tag:5  optional \ProtocolBuffers::TYPE_ENUM */
  protected $type;

  /** @var string $type_name tag:6  optional \ProtocolBuffers::TYPE_STRING */
  protected $type_name;

  /** @var string $extendee tag:2  optional \ProtocolBuffers::TYPE_STRING */
  protected $extendee;

  /** @var string $default_value tag:7  optional \ProtocolBuffers::TYPE_STRING */
  protected $default_value;

  /** @var \google\protobuf\FieldOptions $options tag:8  optional \ProtocolBuffers::TYPE_MESSAGE */
  protected $options;

  // @@protoc_insertion_point(properties_scope:google.protobuf.FieldDescriptorProto)

  // @@protoc_insertion_point(class_scope:google.protobuf.FieldDescriptorProto)

  /**
   * get descriptor for protocol buffers
   * 
   * @return ProtocolBuffersDescriptor
   */
  public static function getDescriptor()
  {
    static $descriptor;

    if (!isset($descriptor)) {
      $desc = new \ProtocolBuffers\DescriptorBuilder();
      $desc->addField(1, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_STRING,
        "name"     => "name",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(3, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_INT32,
        "name"     => "number",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(4, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_ENUM,
        "name"     => "label",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL,
      )));
      $desc->addField(5, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_ENUM,
        "name"     => "type",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE,
      )));
      $desc->addField(6, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_STRING,
        "name"     => "type_name",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(2, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_STRING,
        "name"     => "extendee",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(7, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_STRING,
        "name"     => "default_value",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(8, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "options",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => null,
        "message"  => "\\google\\protobuf\\FieldOptions",
      )));
      // @@protoc_insertion_point(builder_scope:google.protobuf.FieldDescriptorProto)

      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}

