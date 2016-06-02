#
# Example staging server deployment config
#

role :app, %w{ryan@178.62.54.124}

set :deploy_to, '/var/www/vhosts/finding-beyond'
set :build_url, 'finding-beyond.dev'
set :build_environment, 'production'

set :db_host, 'localhost'
set :db_user, 'findingbeyond'
set :db_pass, 'findingbeyond'
set :db_name, 'findingbeyond'
set :db_root_user, 'root'
set :db_root_pass, 'brighton'

set :app_debug, false
