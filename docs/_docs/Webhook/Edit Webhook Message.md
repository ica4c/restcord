---
title: Edit Webhook Message
category: Webhook
order: 14
---

# `editWebhookMessage`

```php
$client->webhook->editWebhookMessage($parameters);
```

## Description

Edits a previously-sent webhook message from the same token.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
webhook.id | snowflake | true | *null*
webhook.token | string | true | *null*
message.id | snowflake | true | *null*
content | string | false | *null*
embeds | array | false | *null*
file | file contents | false | *null*
payload_json | string | false | *null*
allowed_mentions | object | false | *null*
attachments | array | false | *null*
components | array | false | *null*

## Response

Returns a message object on success.

Can Return:

* message
