<?php

/**
 * LICENSE: The MIT License (the "License")
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * https://github.com/azure/azure-storage-php/LICENSE
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * PHP version 5
 *
 * @category  Microsoft
 * @package   MicrosoftAzure\Storage\Common\Models
 * @author    Azure Storage PHP SDK <dmsh@microsoft.com>
 * @copyright 2016 Microsoft Corporation
 * @license   https://github.com/azure/azure-storage-php/LICENSE
 * @link      https://github.com/azure/azure-storage-php
 */

namespace MicrosoftAzure\Storage\Common\Models;

/**
 * Result from calling GetQueueProperties REST wrapper.
 *
 * @category  Microsoft
 * @package   MicrosoftAzure\Storage\Common\Models
 * @author    Azure Storage PHP SDK <dmsh@microsoft.com>
 * @copyright 2016 Microsoft Corporation
 * @license   https://github.com/azure/azure-storage-php/LICENSE
 * @version   Release: 0.11.0
 * @link      https://github.com/azure/azure-storage-php
 */
class GetServicePropertiesResult
{
    private $_serviceProperties;

    /**
     * Creates object from $parsedResponse.
     *
     * @param array $parsedResponse XML response parsed into array.
     *
     * @return MicrosoftAzure\Storage\Common\Models\GetServicePropertiesResult
     */
    public static function create($parsedResponse)
    {
        $result                     = new GetServicePropertiesResult();
        $result->_serviceProperties = ServiceProperties::create($parsedResponse);

        return $result;
    }

    /**
     * Gets service properties object.
     *
     * @return MicrosoftAzure\Storage\Common\Models\ServiceProperties
     */
    public function getValue()
    {
        return $this->_serviceProperties;
    }

    /**
     * Sets service properties object.
     *
     * @param ServiceProperties $serviceProperties object to use.
     *
     * @return none
     */
    public function setValue($serviceProperties)
    {
        $this->_serviceProperties = clone $serviceProperties;
    }
}


