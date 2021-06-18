---
title: Get Invite
category: Invite
order: 1
---

# `getInvite`

```php
$client->invite->getInvite($parameters);
```

## Description



## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
invite.code | string | true | *null*
with_counts? | boolean | false | *null*
with_expiration? | boolean | false | *null*

## Response

Returns an invite object for the given code.

Can Return:

* invite
