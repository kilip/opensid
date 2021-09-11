#!/usr/bin/env sh

SCRIPT_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )"

gunzip < "${SCRIPT_DIR}/db.sql.gz" | psql --dbname=postgresql://opensid:opensid@localhost:5432/opensid
