---
title: Delete Webhook Message
category: Webhook
order: 15
---

# `deleteWebhookMessage`

```php
$client->webhook->deleteWebhookMessage($parameters);
```

## Description

Deletes a message that was created by the webhook.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
webhook.id | snowflake | true | *null*
webhook.token | string | true | *null*
message.id | snowflake | true | *null*

## Response

Returns a 204 NO CONTENT response on success.

