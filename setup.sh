#!/bin/bash


LOWER_ABBR=$(tr '[:upper:]' '[:lower:]' <<< "$1")
UPPER_ABBR=$(tr '[:lower:]' '[:upper:]' <<< "$1")

NAMESPACE=$2

function updateCode {
  # grep -rl "$1" . | xargs sed -i "s/$1/$2/g"
}

updateCode "WPPT" "${UPPER_ABBR}"
updateCode "wppt" "${LOWER_ABBR}"
updateCode "WordpressPluginTemplate" "${NAMESPACE}"
