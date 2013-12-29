<?php
namespace google\protobuf;

// @@protoc_insertion_point(namespace:.google.protobuf.EnumDescriptorProto)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: google/protobuf/descriptor.proto
 *
 * Describes an enum type.
 *
 * -*- magic methods -*-
 *
 * @method string getName()
 * @method void setName(string $value)
 * @method array getValue()
 * @method void appendValue(array $value)
 * @method \google\protobuf\EnumOptions getOptions()
 * @method void setOptions(\google\protobuf\EnumOptions $value)
 */
class EnumDescriptorProto extends \ProtocolBuffers\Message
{
  // @@protoc_insertion_point(traits:.google.protobuf.EnumDescriptorProto)
  
  /**
   * @var string $name
   * @tag 1
   * @label optional
   **/
  protected $name;
  
  /**
   * @var array $value
   * @tag 2
   * @label optional
   * @see \google\protobuf\EnumValueDescriptorProto
   **/
  protected $value;
  
  /**
   * @var \google\protobuf\EnumOptions $options
   * @tag 3
   * @label optional
   **/
  protected $options;
  
  
  // @@protoc_insertion_point(properties_scope:.google.protobuf.EnumDescriptorProto)

  // @@protoc_insertion_point(class_scope:.google.protobuf.EnumDescriptorProto)

  /**
   * get descriptor for protocol buffers
   * 
   * @return \ProtocolBuffersDescriptor
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
      $desc->addField(2, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "value",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message" => "\\google\\protobuf\\EnumValueDescriptorProto",
      )));
      $desc->addField(3, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "options",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => null,
        "message" => "\\google\\protobuf\\EnumOptions",
      )));
      // @@protoc_insertion_point(builder_scope:.google.protobuf.EnumDescriptorProto)

      $descriptor = $desc->build();
    }
    return $descriptor;
  }

}
