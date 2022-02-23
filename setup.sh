#!/bin/bash

read -p 'Plugin Namespace: ' NAMESPACE

UPPER_ABBR=$(echo $NAMESPACE | sed 's/[a-z]*//g')
LOWER_ABBR=$(tr '[:upper:]' '[:lower:]' <<< "$UPPER_ABBR")

echo $LOWER_ABBR

function updateCode {
  grep -rl "$1" --exclude=setup.sh * | xargs sed -i '' "s/$1/$2/g"
}

updateCode "WPPT" "${UPPER_ABBR}"
updateCode "wppt" "${LOWER_ABBR}"
updateCode "WordpressPluginTemplate" "${NAMESPACE}"
