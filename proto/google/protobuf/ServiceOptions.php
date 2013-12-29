<?php
namespace google\protobuf;

// @@protoc_insertion_point(namespace:.google.protobuf.ServiceOptions)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: google/protobuf/descriptor.proto
 *
 * -*- magic methods -*-
 *
 * @method array getUninterpretedOption()
 * @method void appendUninterpretedOption(array $value)
 */
class ServiceOptions extends \ProtocolBuffers\Message
{
  // @@protoc_insertion_point(traits:.google.protobuf.ServiceOptions)
  
  /**
   * The parser stores options it doesn't recognize here. See above.
   *
   * @var array $uninterpreted_option
   * @tag 999
   * @label optional
   * @see \google\protobuf\UninterpretedOption
   **/
  protected $uninterpreted_option;
  
  
  // @@protoc_insertion_point(properties_scope:.google.protobuf.ServiceOptions)

  // @@protoc_insertion_point(class_scope:.google.protobuf.ServiceOptions)

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
      $desc->addField(999, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "uninterpreted_option",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message" => "\\google\\protobuf\\UninterpretedOption",
      )));
      // @@protoc_insertion_point(builder_scope:.google.protobuf.ServiceOptions)

      $descriptor = $desc->build();
    }
    return $descriptor;
  }

}
