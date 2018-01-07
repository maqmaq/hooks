#!/bin/bash

fixer_path = 'vendor/bin/php-cs-fixer'
if ! [[ -x $fixer_path ]]; then
        echo "ERROR Fixer is not executable, please run composer"
        exit 2
fi


while read -r file;
do
  file=${file}
  if [[ $file = *.php ]];
  then
    $fixer_path fix "$file" --rules=@PSR2,blank_line_before_statement
    git add "$file"
  fi
done < <(git diff --name-only --cached --diff-filter=ACMRTUXB)