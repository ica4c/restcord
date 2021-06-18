---
title: Modify Guild Welcome Screen
category: Guild
order: 39
---

# `modifyGuildWelcomeScreen`

```php
$client->guild->modifyGuildWelcomeScreen($parameters);
```

## Description

Modify the guild&#039;s Welcome Screen. Requires the MANAGE_GUILD permission.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
guild.id | snowflake | true | *null*
enabled | boolean | false | *null*
welcome_channels | array | false | *null*
description | string | false | *null*

## Response

Returns the updated Welcome Screen object.

Can Return:

* Welcome Screen
