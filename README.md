AdminlteBundle
==============
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/fb09259c-1e0e-4c6a-b069-ce6ac05c5518/big.png)](https://insight.sensiolabs.com/projects/fb09259c-1e0e-4c6a-b069-ce6ac05c5518)

AdminlteBundle is a component that allows easy integration to Symfony projects.

**Requirements**
  * AdminLTE 2 - almsaeedstudio.
  * Symfony 2.x or 3.x applications.
  
Installation
------------

### Step 1: Download the Bundle

```bash
$ composer require jorgecaso/adminltebundle
```

Use Composer installed globally, as explained in the [Composer documentation](https://getcomposer.org/doc/00-intro.md).

### Step 2: Enable the Bundle

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Jorgecaso\AdminlteBundle\JorgecasoAdminlteBundle(),
        );
    }

    // ...
}
```

Example
-------

Modify the `app/Resources/views/base.html.twig` file and replace the content with:

```twig
{% extends "JorgecasoAdminlteBundle:Layout:dashboard.html.twig" %}

{% block body %}

{% endblock %}
```
Insert the desired content into body tag. **It's all**.
**(Tip: Review the AdminLTE documentation :) .)**

License
-------

This software is published under the [MIT License](LICENSE.md)
