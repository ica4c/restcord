---
title: Search Guild Members
category: Guild
order: 11
---

# `searchGuildMembers`

```php
$client->guild->searchGuildMembers($parameters);
```

## Description



## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
guild.id | snowflake | true | *null*
query | string | false | *null*
limit | integer | false | 1

## Response

Returns a list of guild member objects whose username or nickname starts with a provided string.

Can Return:

* guild member
