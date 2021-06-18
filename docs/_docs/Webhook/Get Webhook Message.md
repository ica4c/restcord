---
title: Get Webhook Message
category: Webhook
order: 13
---

# `getWebhookMessage`

```php
$client->webhook->getWebhookMessage($parameters);
```

## Description



## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
webhook.id | snowflake | true | *null*
webhook.token | string | true | *null*
message.id | snowflake | true | *null*

## Response

Returns a previously-sent webhook message from the same token.

Can Return:

* message
