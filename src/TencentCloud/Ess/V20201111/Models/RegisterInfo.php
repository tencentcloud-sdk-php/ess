<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发起流程快速注册相关信息
 *
 * @method string getLegalName() 获取法人姓名
 * @method void setLegalName(string $LegalName) 设置法人姓名
 * @method string getUscc() 获取社会统一信用代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUscc(string $Uscc) 设置社会统一信用代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnifiedSocialCreditCode() 获取社会统一信用代码
 * @method void setUnifiedSocialCreditCode(string $UnifiedSocialCreditCode) 设置社会统一信用代码
 * @method string getOrganizationAddress() 获取组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。
 * @method void setOrganizationAddress(string $OrganizationAddress) 设置组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。
 * @method array getAuthorizationTypes() 获取指定企业认证的授权方式 支持多选:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
 * @method void setAuthorizationTypes(array $AuthorizationTypes) 设置指定企业认证的授权方式 支持多选:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
 * @method integer getAuthorizationType() 获取指定企业认证的授权方式:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
 * @method void setAuthorizationType(integer $AuthorizationType) 设置指定企业认证的授权方式:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
 */
class RegisterInfo extends AbstractModel
{
    /**
     * @var string 法人姓名
     */
    public $LegalName;

    /**
     * @var string 社会统一信用代码
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Uscc;

    /**
     * @var string 社会统一信用代码
     */
    public $UnifiedSocialCreditCode;

    /**
     * @var string 组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。
     */
    public $OrganizationAddress;

    /**
     * @var array 指定企业认证的授权方式 支持多选:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
     * @deprecated
     */
    public $AuthorizationTypes;

    /**
     * @var integer 指定企业认证的授权方式:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
     */
    public $AuthorizationType;

    /**
     * @param string $LegalName 法人姓名
     * @param string $Uscc 社会统一信用代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnifiedSocialCreditCode 社会统一信用代码
     * @param string $OrganizationAddress 组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。
     * @param array $AuthorizationTypes 指定企业认证的授权方式 支持多选:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
     * @param integer $AuthorizationType 指定企业认证的授权方式:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LegalName",$param) and $param["LegalName"] !== null) {
            $this->LegalName = $param["LegalName"];
        }

        if (array_key_exists("Uscc",$param) and $param["Uscc"] !== null) {
            $this->Uscc = $param["Uscc"];
        }

        if (array_key_exists("UnifiedSocialCreditCode",$param) and $param["UnifiedSocialCreditCode"] !== null) {
            $this->UnifiedSocialCreditCode = $param["UnifiedSocialCreditCode"];
        }

        if (array_key_exists("OrganizationAddress",$param) and $param["OrganizationAddress"] !== null) {
            $this->OrganizationAddress = $param["OrganizationAddress"];
        }

        if (array_key_exists("AuthorizationTypes",$param) and $param["AuthorizationTypes"] !== null) {
            $this->AuthorizationTypes = $param["AuthorizationTypes"];
        }

        if (array_key_exists("AuthorizationType",$param) and $param["AuthorizationType"] !== null) {
            $this->AuthorizationType = $param["AuthorizationType"];
        }
    }
}
