




https://github.com/maxsky/Lumen-AppKey-Generator

# Instalação

```bash
composer require maxsky/lumen-app-key-generator
```
# Descrição
Support generate **APP_KEY** in Lumen same as Laravel.
# Uso
Modify `$commands` variable in `app/Console/Kernel`:
```php
protected $commands = [
    \Illuminate\Console\KeyGenerateCommand::class,
];
```
Then run command at project root path:
```bash
php artisan key:generate
php artisan key:generate --show
```
Add param `--show` will display a generate key without replace **APP_KEY** in `.env` file.

Para executar o servidor na porta 8000
php -S 127.0.0.1:8000 -t public