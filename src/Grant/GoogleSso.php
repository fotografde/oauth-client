<?php

namespace GetPhoto\Oauth2\Client\Grant;

/**
 *  Impersonate grant
 *  Grant for trusted client to impersonate user
 *
 * @author navihtot ivan.toth@fotograf.de
 */
class GoogleSso extends \League\OAuth2\Client\Grant\AbstractGrant {
	/**
	 * @inheritdoc
	 */
	protected function getName() {
		return 'google_sso';
	}

	/**
	 * @inheritdoc
	 */
	protected function getRequiredRequestParameters() {
		return [
			'id_token',
		];
	}
}
