#!/bin/bash
while read -r file;
do
fixer_path='vendor/bin/php-cs-fixer'
if ! [[ -x $fixer_path ]]; then
        echo "ERROR Fixer is not executable, please run composer install"
        exit 2
fi
  file=${file}
  if [[ $file = *.php ]];
  then
    $fixer_path fix "$file" --config=.php_cs.dist.php
    git add "$file"
  fi
done < <(git diff --name-only --cached --diff-filter=ACMRTUXB)