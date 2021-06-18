---
title: Get Guild Preview
category: Guild
order: 3
---

# `getGuildPreview`

```php
$client->guild->getGuildPreview($parameters);
```

## Description

If the user is not in the guild, then the guild must be lurkable (it must be Discoverable or have a live public stage).

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
guild.id | snowflake | true | *null*

## Response

Returns the guild preview object for the given id.

Can Return:

* guild preview
