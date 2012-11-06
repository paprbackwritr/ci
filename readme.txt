1. Update the Base url.
U /application/config/config.php.
$config['base_url']	= 'http://localhost/emirates/ci/';

2. Update db details.
U /application/config/database.php
$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = '';
$db['default']['database'] = 'ci_helloworld';

Set $db['default']['db_debug'] = FALSE; (For CI 2.0+)

3. Autoload the database
U /application/config/autoload.php
$autoload['libraries'] = array('database');

4. Delete the (current) default controller and view files.
D /application/controllers/welcome.php
D /application/views/welcome_message.php

5. Make a new controller as the new default controller.
U /application/config/routes.php
$route['default_controller'] = "Helloworld";

6. Create the database (ci_helloworld)

7. Create the Helloworld model
A /application/models/helloworld_model.php

8. Create the Helloworld controller
A /application/controllers/helloworld.php

8. Create the Helloworld view
A /application/views/helloworld_view.php

9. To enable PHP alternative short hand syntax
U /application/config/config.php
$config['rewrite_short_tags'] = TRUE;