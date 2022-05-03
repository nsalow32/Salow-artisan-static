---
title: '09 - Netlify CMS'
date: 2021-11-27
image: https://res.cloudinary.com/artisanstatic/cms.jpg
comments: false
---
The included files related to Netlify CMS should work out of the box.

Just make sure that your [Netlify Identity](https://docs.netlify.com/visitor-access/identity) settings and [Git Gateway](https://docs.netlify.com/visitor-access/git-gateway) settings are correctly configured.

You can change the Netlify CMS version being used in `config.php` under the `services` key.

```php
<?php

return [
    // ...
    'services' => [
        'cmsVersion' => '~2.10',
    ],
    // ...
];
```

Navigate to `yoursite.netlify.app/admin` to access the CMS.

![Netlify CMS](https://res.cloudinary.com/artisanstatic/netlify-cms.png)
