<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal;

/**
 * Protobuf enum <code>Google\Protobuf\Internal</code>
 */
class FieldDescriptorProto_Type
{
    /**
     * 0 is reserved for errors.
     * Order is weird for historical reasons.
     *
     * Generated from protobuf enum <code>TYPE_DOUBLE = 1;</code>
     */
    const TYPE_DOUBLE = 1;
    /**
     * Generated from protobuf enum <code>TYPE_FLOAT = 2;</code>
     */
    const TYPE_FLOAT = 2;
    /**
     * Not ZigZag encoded.  Negative numbers take 10 bytes.  Use TYPE_SINT64 if
     * negative values are likely.
     *
     * Generated from protobuf enum <code>TYPE_INT64 = 3;</code>
     */
    const TYPE_INT64 = 3;
    /**
     * Generated from protobuf enum <code>TYPE_UINT64 = 4;</code>
     */
    const TYPE_UINT64 = 4;
    /**
     * Not ZigZag encoded.  Negative numbers take 10 bytes.  Use TYPE_SINT32 if
     * negative values are likely.
     *
     * Generated from protobuf enum <code>TYPE_INT32 = 5;</code>
     */
    const TYPE_INT32 = 5;
    /**
     * Generated from protobuf enum <code>TYPE_FIXED64 = 6;</code>
     */
    const TYPE_FIXED64 = 6;
    /**
     * Generated from protobuf enum <code>TYPE_FIXED32 = 7;</code>
     */
    const TYPE_FIXED32 = 7;
    /**
     * Generated from protobuf enum <code>TYPE_BOOL = 8;</code>
     */
    const TYPE_BOOL = 8;
    /**
     * Generated from protobuf enum <code>TYPE_STRING = 9;</code>
     */
    const TYPE_STRING = 9;
    /**
     * Tag-delimited aggregate.
     * Group type is deprecated and not supported in proto3. However, Proto3
     * implementations should still be able to parse the group wire format and
     * treat group fields as unknown fields.
     *
     * Generated from protobuf enum <code>TYPE_GROUP = 10;</code>
     */
    const TYPE_GROUP = 10;
    /**
     * Length-delimited aggregate.
     *
     * Generated from protobuf enum <code>TYPE_MESSAGE = 11;</code>
     */
    const TYPE_MESSAGE = 11;
    /**
     * New in version 2.
     *
     * Generated from protobuf enum <code>TYPE_BYTES = 12;</code>
     */
    const TYPE_BYTES = 12;
    /**
     * Generated from protobuf enum <code>TYPE_UINT32 = 13;</code>
     */
    const TYPE_UINT32 = 13;
    /**
     * Generated from protobuf enum <code>TYPE_ENUM = 14;</code>
     */
    const TYPE_ENUM = 14;
    /**
     * Generated from protobuf enum <code>TYPE_SFIXED32 = 15;</code>
     */
    const TYPE_SFIXED32 = 15;
    /**
     * Generated from protobuf enum <code>TYPE_SFIXED64 = 16;</code>
     */
    const TYPE_SFIXED64 = 16;
    /**
     * Uses ZigZag encoding.
     *
     * Generated from protobuf enum <code>TYPE_SINT32 = 17;</code>
     */
    const TYPE_SINT32 = 17;
    /**
     * Uses ZigZag encoding.
     *
     * Generated from protobuf enum <code>TYPE_SINT64 = 18;</code>
     */
    const TYPE_SINT64 = 18;
}

