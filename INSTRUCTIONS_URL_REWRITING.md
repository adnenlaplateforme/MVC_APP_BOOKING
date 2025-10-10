# Instructions URL Rewriting

## ✅ mod_rewrite activé dans MAMP

J'ai activé mod_rewrite en décommentant la ligne dans `/Applications/MAMP/conf/apache/httpd.conf`.

## 🔄 Après redémarrage de MAMP

Si les URLs propres fonctionnent, vous pouvez utiliser :
- `/` au lieu de `index.php`
- `/home/about` au lieu de `index.php?url=home/about`
- `/home/contact` au lieu de `index.php?url=home/contact`
- `/auth/login` au lieu de `index.php?url=auth/login`

## ⚠️ Si problème persiste

1. Vérifiez que MAMP est bien redémarré
2. Testez : `http://localhost:8888/php-starter-cdpi/public/`
3. Si erreur 500, désactivez temporairement le .htaccess :
   ```bash
   mv public/.htaccess public/.htaccess.disabled
   ```

## 🔧 Alternative sans mod_rewrite

Si mod_rewrite ne fonctionne toujours pas, utilisez les URLs avec index.php :
- `index.php` (accueil)
- `index.php?url=home/about`
- `index.php?url=home/contact`
- `index.php?url=auth/login` 