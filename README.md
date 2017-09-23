[![Stories in Ready](https://badge.waffle.io/maiconpinto/cakephp-adminlte-theme.png?label=ready&title=Ready)](https://waffle.io/maiconpinto/cakephp-adminlte-theme)
# CakePHP AdminLTE Theme

## Installation

You can install using [composer](http://getcomposer.org).

```
composer require dejw-cake/adminlte
```

### Enable Plugin

```php
// config/bootstrap.php

Plugin::load('DejwCake/AdminLTE', ['bootstrap' => true, 'routes' => true]);
```

### Enable theme

```php
// src/Controller/AppController.php

public function beforeRender(Event $event)
{
    $this->viewBuilder()->setTheme('DejwCake/AdminLTE');
}
```

### Enable Form

```php
// src/View/AppView.php

public function initialize()
{
    $this->loadHelper('Form', ['className' => 'DejwCake/AdminLTE.Form']);
}
```

### Configure

```php
// src/Controller/AppController.php
use Cake\Core\Configure;

public function beforeRender(Event $event)
{
    // ...
    $this->set('theme', Configure::read('Theme'));
}
```

```php
// To customize configuration paste it at end of file config/bootstrap.php

Configure::write('Theme.title', 'CMS');
Configure::write('Theme.logo', [
    'mini' => 'CMS',
    'large' => 'CMS'
]);
```
