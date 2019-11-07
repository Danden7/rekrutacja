<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

/**
 * Indicates the current state of the database.
 *
 * Protobuf enum <code>Google\Spanner\Admin\Database\V1\Database\State</code>
 */
class Database_State
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The database is still being created. Operations on the database may fail
     * with `FAILED_PRECONDITION` in this state.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The database is fully created and ready for use.
     *
     * Generated from protobuf enum <code>READY = 2;</code>
     */
    const READY = 2;
}
