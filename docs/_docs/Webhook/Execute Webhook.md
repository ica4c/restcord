---
title: Execute Webhook
category: Webhook
order: 10
---

# `executeWebhook`

```php
$client->webhook->executeWebhook($parameters);
```

## Description

least one of

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
webhook.id | snowflake | true | *null*
webhook.token | string | true | *null*
wait | boolean | false | *null*
thread_id | snowflake | false | *null*
content | string | false | *null*
username | string | false | *null*
avatar_url | string | false | *null*
tts | boolean | false | *null*
file | file contents | false | *null*
embeds | array | false | *null*
payload_json | string | false | *null*
allowed_mentions | object | false | *null*
components | array | false | *null*

## Response

Possibly No Response

