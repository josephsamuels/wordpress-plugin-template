#!/bin/bash

if [ $# -ne 2 ]; then
  echo "Requires two parameters. Abbreviation and Namespace."
  exit 1
fi

LOWER_ABBR=$(tr '[:upper:]' '[:lower:]' <<< "$1")
UPPER_ABBR=$(tr '[:lower:]' '[:upper:]' <<< "$1")

NAMESPACE=$2

function updateCode {
  grep -rl "$1" --exclude=setup.sh * | xargs sed -i "s/$1/$2/g"
}

updateCode "WPPT" "${UPPER_ABBR}"
updateCode "wppt" "${LOWER_ABBR}"
updateCode "WordpressPluginTemplate" "${NAMESPACE}"
