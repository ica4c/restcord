---
title: Create Webhook
category: Webhook
order: 1
---

# `createWebhook`

```php
$client->webhook->createWebhook($parameters);
```

## Description

Create a new webhook. Requires the MANAGE_WEBHOOKS permission.  Webhook names follow our naming restrictions that can be found in our Usernames and Nicknames documentation, with the following additional stipulations:

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
name | string | false | *null*
avatar? | image data | false | *null*

## Response

Returns a webhook object on success.

Can Return:

* webhook
