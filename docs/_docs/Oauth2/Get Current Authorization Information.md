---
title: Get Current Authorization Information
category: Oauth2
order: 2
---

# `getCurrentAuthorizationInformation`

```php
$client->oauth2->getCurrentAuthorizationInformation($parameters);
```

## Description

Requires authentication with a bearer token.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
application | object | false | *null*
scopes | array | false | *null*
expires | ISO8601 timestamp | false | *null*
user? | object | false | *null*

## Response

Returns info about the current authorization.

