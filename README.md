Ciao ragazzi!
Benvenuto sul progetto di delviale.it
per far partire l'app abbiamo bisogno di:{
                                          -node.js,
                                          -vue.js,
                                          -php,
                                          -laravel,
                                          }

Per far partire l'app esegui sulla tua linea di comando:
COMPOSER UPDATE/COMPOSER INSTALL
NPM I
PHP ARTISAN SERVE


Configura il file .env

APP_NAME=Laravel
APP_ENV=local
# ToDo: Ricordarsi di generare la APP_KEY usando
# php artisan key:generate
APP_KEY=base64:Qqr3tipAD/zyecva7XEY4VxVV0IIABI1DPRMSgCQXUk=
APP_DEBUG=true
APP_PORT=8000
APP_URL=http://localhost:${APP_PORT}
APP_FRONTEND_URL=http://localhost:5173
# braintree  
BRAINTREE_ENVIRONMENT=sandbox
BRAINTREE_MERCHANT_ID= 43nxtqvdm7mkjcmk
BRAINTREE_PUBLIC_KEY=r2g7nb8b9jvf38xw
BRAINTREE_PRIVATE_KEY=d2ccca20763575dfad56b4f0dbdc6229

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

# ToDo: Configurare la connessione al DB
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=
DB_USERNAME=root
DB_PASSWORD=root

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"



                                        
                    

