---
title: Delete Guild
category: Guild
order: 5
---

# `deleteGuild`

```php
$client->guild->deleteGuild($parameters);
```

## Description

Delete a guild permanently. User must be owner.  Fires a Guild Delete Gateway event.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
guild.id | snowflake | true | *null*

## Response

Returns 204 No Content on success.

