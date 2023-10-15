<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT! (protoc-gen-twirp_php 0.9.1)
# source: proto/frey.proto

declare(strict_types=1);

namespace Common;

/**
 *
 *
 * Generated from protobuf service <code>common.Frey</code>
 */
interface Frey
{
    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/RequestRegistration</code>
     *
     * @throws \Twirp\Error
     */
    public function RequestRegistration(array $ctx, \Common\AuthRequestRegistrationPayload $req): \Common\AuthRequestRegistrationResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/ApproveRegistration</code>
     *
     * @throws \Twirp\Error
     */
    public function ApproveRegistration(array $ctx, \Common\AuthApproveRegistrationPayload $req): \Common\AuthApproveRegistrationResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/Authorize</code>
     *
     * @throws \Twirp\Error
     */
    public function Authorize(array $ctx, \Common\AuthAuthorizePayload $req): \Common\AuthAuthorizeResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/QuickAuthorize</code>
     *
     * @throws \Twirp\Error
     */
    public function QuickAuthorize(array $ctx, \Common\AuthQuickAuthorizePayload $req): \Common\AuthQuickAuthorizeResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/Me</code>
     *
     * @throws \Twirp\Error
     */
    public function Me(array $ctx, \Common\AuthMePayload $req): \Common\AuthMeResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/DepersonalizeAccount</code>
     *
     * @throws \Twirp\Error
     */
    public function DepersonalizeAccount(array $ctx, \Common\DepersonalizePayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/ChangePassword</code>
     *
     * @throws \Twirp\Error
     */
    public function ChangePassword(array $ctx, \Common\AuthChangePasswordPayload $req): \Common\AuthChangePasswordResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/RequestResetPassword</code>
     *
     * @throws \Twirp\Error
     */
    public function RequestResetPassword(array $ctx, \Common\AuthRequestResetPasswordPayload $req): \Common\AuthRequestResetPasswordResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/ApproveResetPassword</code>
     *
     * @throws \Twirp\Error
     */
    public function ApproveResetPassword(array $ctx, \Common\AuthApproveResetPasswordPayload $req): \Common\AuthApproveResetPasswordResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/GetAccessRules</code>
     *
     * @throws \Twirp\Error
     */
    public function GetAccessRules(array $ctx, \Common\AccessGetAccessRulesPayload $req): \Common\AccessGetAccessRulesResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/GetRuleValue</code>
     *
     * @throws \Twirp\Error
     */
    public function GetRuleValue(array $ctx, \Common\AccessGetRuleValuePayload $req): \Common\AccessGetRuleValueResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/UpdatePersonalInfo</code>
     *
     * @throws \Twirp\Error
     */
    public function UpdatePersonalInfo(array $ctx, \Common\PersonsUpdatePersonalInfoPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/GetPersonalInfo</code>
     *
     * @throws \Twirp\Error
     */
    public function GetPersonalInfo(array $ctx, \Common\PersonsGetPersonalInfoPayload $req): \Common\PersonsGetPersonalInfoResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/FindByTenhouIds</code>
     *
     * @throws \Twirp\Error
     */
    public function FindByTenhouIds(array $ctx, \Common\PersonsFindByTenhouIdsPayload $req): \Common\PersonsFindByTenhouIdsResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/FindByTitle</code>
     *
     * @throws \Twirp\Error
     */
    public function FindByTitle(array $ctx, \Common\PersonsFindByTitlePayload $req): \Common\PersonsFindByTitleResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/GetGroups</code>
     *
     * @throws \Twirp\Error
     */
    public function GetGroups(array $ctx, \Common\PersonsGetGroupsPayload $req): \Common\PersonsGetGroupsResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/GetEventAdmins</code>
     *
     * @throws \Twirp\Error
     */
    public function GetEventAdmins(array $ctx, \Common\AccessGetEventAdminsPayload $req): \Common\AccessGetEventAdminsResponse;

    /**
     * admin
     *
     * Generated from protobuf method <code>common.Frey/GetSuperadminFlag</code>
     *
     * @throws \Twirp\Error
     */
    public function GetSuperadminFlag(array $ctx, \Common\AccessGetSuperadminFlagPayload $req): \Common\AccessGetSuperadminFlagResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/GetOwnedEventIds</code>
     *
     * @throws \Twirp\Error
     */
    public function GetOwnedEventIds(array $ctx, \Common\AccessGetOwnedEventIdsPayload $req): \Common\AccessGetOwnedEventIdsResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/GetRulesList</code>
     *
     * @throws \Twirp\Error
     */
    public function GetRulesList(array $ctx, \Common\AccessGetRulesListPayload $req): \Common\AccessGetRulesListResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/GetAllEventRules</code>
     *
     * @throws \Twirp\Error
     */
    public function GetAllEventRules(array $ctx, \Common\AccessGetAllEventRulesPayload $req): \Common\AccessGetAllEventRulesResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/GetPersonAccess</code>
     *
     * @throws \Twirp\Error
     */
    public function GetPersonAccess(array $ctx, \Common\AccessGetPersonAccessPayload $req): \Common\AccessGetPersonAccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/GetGroupAccess</code>
     *
     * @throws \Twirp\Error
     */
    public function GetGroupAccess(array $ctx, \Common\AccessGetGroupAccessPayload $req): \Common\AccessGetGroupAccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/GetAllPersonAccess</code>
     *
     * @throws \Twirp\Error
     */
    public function GetAllPersonAccess(array $ctx, \Common\AccessGetAllPersonAccessPayload $req): \Common\AccessGetAllPersonAccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/GetAllGroupAccess</code>
     *
     * @throws \Twirp\Error
     */
    public function GetAllGroupAccess(array $ctx, \Common\AccessGetAllGroupAccessPayload $req): \Common\AccessGetAllGroupAccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/AddRuleForPerson</code>
     *
     * @throws \Twirp\Error
     */
    public function AddRuleForPerson(array $ctx, \Common\AccessAddRuleForPersonPayload $req): \Common\AccessAddRuleForPersonResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/AddRuleForGroup</code>
     *
     * @throws \Twirp\Error
     */
    public function AddRuleForGroup(array $ctx, \Common\AccessAddRuleForGroupPayload $req): \Common\AccessAddRuleForGroupResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/UpdateRuleForPerson</code>
     *
     * @throws \Twirp\Error
     */
    public function UpdateRuleForPerson(array $ctx, \Common\AccessUpdateRuleForPersonPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/UpdateRuleForGroup</code>
     *
     * @throws \Twirp\Error
     */
    public function UpdateRuleForGroup(array $ctx, \Common\AccessUpdateRuleForGroupPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/DeleteRuleForPerson</code>
     *
     * @throws \Twirp\Error
     */
    public function DeleteRuleForPerson(array $ctx, \Common\AccessDeleteRuleForPersonPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/DeleteRuleForGroup</code>
     *
     * @throws \Twirp\Error
     */
    public function DeleteRuleForGroup(array $ctx, \Common\AccessDeleteRuleForGroupPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/ClearAccessCache</code>
     *
     * @throws \Twirp\Error
     */
    public function ClearAccessCache(array $ctx, \Common\AccessClearAccessCachePayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/CreateAccount</code>
     *
     * @throws \Twirp\Error
     */
    public function CreateAccount(array $ctx, \Common\PersonsCreateAccountPayload $req): \Common\PersonsCreateAccountResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/CreateGroup</code>
     *
     * @throws \Twirp\Error
     */
    public function CreateGroup(array $ctx, \Common\PersonsCreateGroupPayload $req): \Common\PersonsCreateGroupResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/UpdateGroup</code>
     *
     * @throws \Twirp\Error
     */
    public function UpdateGroup(array $ctx, \Common\PersonsUpdateGroupPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/DeleteGroup</code>
     *
     * @throws \Twirp\Error
     */
    public function DeleteGroup(array $ctx, \Common\PersonsDeleteGroupPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/AddPersonToGroup</code>
     *
     * @throws \Twirp\Error
     */
    public function AddPersonToGroup(array $ctx, \Common\PersonsAddPersonToGroupPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/RemovePersonFromGroup</code>
     *
     * @throws \Twirp\Error
     */
    public function RemovePersonFromGroup(array $ctx, \Common\PersonsRemovePersonFromGroupPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/GetPersonsOfGroup</code>
     *
     * @throws \Twirp\Error
     */
    public function GetPersonsOfGroup(array $ctx, \Common\PersonsGetPersonsOfGroupPayload $req): \Common\PersonsGetPersonsOfGroupResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/GetGroupsOfPerson</code>
     *
     * @throws \Twirp\Error
     */
    public function GetGroupsOfPerson(array $ctx, \Common\PersonsGetGroupsOfPersonPayload $req): \Common\PersonsGetGroupsOfPersonResponse;

    /**
     * superadmin: this should be covered with some
     * bootstrap authenthication, TODO
     *
     * Generated from protobuf method <code>common.Frey/AddSystemWideRuleForPerson</code>
     *
     * @throws \Twirp\Error
     */
    public function AddSystemWideRuleForPerson(array $ctx, \Common\AccessAddSystemWideRuleForPersonPayload $req): \Common\AccessAddSystemWideRuleForPersonResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Frey/AddSystemWideRuleForGroup</code>
     *
     * @throws \Twirp\Error
     */
    public function AddSystemWideRuleForGroup(array $ctx, \Common\AccessAddSystemWideRuleForGroupPayload $req): \Common\AccessAddSystemWideRuleForGroupResponse;
}
