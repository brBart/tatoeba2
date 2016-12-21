<?php
/**
 * Tatoeba Project, free collaborative creation of multilingual corpuses project
 * Copyright (C) 2016  Gilles Bedel
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

class AudioHelper extends AppHelper
{
    public $helpers = array(
        'Html',
    );

    private $licenses;

    public function __construct() {
        $this->licenses = array(
            /* @translators: refers to the license used for audio recordings */
            'Public domain' => array('name' => __('Public domain', true)),
            'CC BY-NC 4.0' => array(
                'name' => 'CC BY-NC 4.0',
                'url' => 'https://creativecommons.org/licenses/by-nc/4.0/',
            ),
        );
    }

    public function getLicenseOptions() {
        /* @translators: refers to the license used for audio recordings */
        $keyToName = array('' => __('No license for offsite use', true));
        foreach ($this->licenses as $key => $val) {
            $keyToName[$key] = $val['name'];
        }
        return $keyToName;
    }

    private function defaultAttribUrl($username) {
        return array(
            'lang' => '',
            'controller' => 'user',
            'action' => 'profile',
            $username
        );
    }

    private function licenseLink($license) {
        return $this->Html->link(
            $this->licenses[$license]['name'],
            $this->licenses[$license]['url']
        );
    }

    public function displayAudioInfo($audio) {
        if ($audio['User']) {
            $username  = $audio['User']['username'];
            $license   = $audio['User']['audio_license'];
            $attribUrl = $audio['User']['audio_attribution_url'];
            if (empty($attribUrl)) {
                $attribUrl = $this->defaultAttribUrl($username);
            }
        } else {
            $username  = $audio['external']['username'];
            $license   = $audio['external']['license'];
            $attribUrl = $audio['external']['attribution_url'];
        }
        if (!empty($attribUrl)) {
            $username = $this->Html->link($username, $attribUrl);
        }
        if (empty($license) || !isset($this->licenses[$license])) {
            $license = __d('license', 'unknown', true);
        } elseif (isset($this->licenses[$license]['url'])) {
            $license = $this->licenseLink($license);
        } else {
            $license = $this->licenses[$license]['name'];
        }
?>
<ul>
  <li><?php echo format(__('Recorded by: {username}', true), compact('username')); ?></li>
  <li><?php echo format(__('Licensed under: {license}', true), compact('license')); ?></li>
</ul>
<?php
    }

    public function formatLicenceMessage($audioSettings, $username) {
        $url = empty($audioSettings['audio_attribution_url']) ?
               $this->defaultAttribUrl($username) :
               $audioSettings['audio_attribution_url'];
        $userLink = $this->Html->link($username, $url);

        $license = $audioSettings['audio_license'];
        if (empty($license)) {
            $msg = __('You may not reuse the following audio recordings '.
                      'outside the Tatoeba project, because {userName} did '.
                      'not chose any license for them yet.', true);
        } elseif ($license == 'Public domain') {
            $msg = __('The following audio recordings, attributed to '.
                      '{userName}, are licensed under the public domain.',
                      true);
        } elseif (isset($this->licenses[$license])) {
            $license = $this->licenseLink($license);
            $msg = __('The following audio recordings, attributed to '.
                      '{userName}, are licensed under the {licenseName} '.
                      'license.', true);
        } else {
            $msg = __('The following audio recordings, attributed to '.
                      '{userName}, are licensed under an unknown license.',
                      true);
        }
        return format($msg, array(
            'userName' => $userLink,
            'licenseName' => $license
        ));
    }
}
?>
