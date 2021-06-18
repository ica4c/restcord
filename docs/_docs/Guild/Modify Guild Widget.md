---
title: Modify Guild Widget
category: Guild
order: 34
---

# `modifyGuildWidget`

```php
$client->guild->modifyGuildWidget($parameters);
```

## Description

Modify a guild widget object for the guild. All attributes may be passed in with JSON and modified. Requires the MANAGE_GUILD permission.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
guild.id | snowflake | true | *null*

## Response

Returns the updated guild widget object.

Can Return:

* guild widget
