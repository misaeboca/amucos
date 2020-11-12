# config valid for current version and patch releases of Capistrano
lock "~> 3.14.0"

set :application, "amuco"
#set :repo_url, "git@github.com:usaboxZT/my.usabox.com.git"
set :repo_url, "ssh://git-codecommit.us-east-1.amazonaws.com/v1/repos/mw-amuco"
# Default branch is :master
# ask :branch, `git rev-parse --abbrev-ref HEAD`.chomp

# Default deploy_to directory is /var/www/my_app_name
# set :deploy_to, "/var/www/my_app_name"
set :deploy_to, "/var/www/vhost/amuco"
# Default value for :format is :airbrussh.
# set :format, :airbrussh

# You can configure the Airbrussh format using :format_options.
# These are the defaults.
# set :format_options, command_output: true, log_file: "log/capistrano.log", color: :auto, truncate: :auto

# Default value for :pty is false
# set :pty, true

# Default value for :linked_files is []
# append :linked_files, "config/database.yml"

# Default value for linked_dirs is []
# append :linked_dirs, "log", "tmp/pids", "tmp/cache", "tmp/sockets", "public/system"

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

# Default value for local_user is ENV['USER']
# set :local_user, -> { `git config user.name`.chomp }

# Default value for keep_releases is 5
set :keep_releases, 5

# Uncomment the following to require manually verifying the host key before first deploy.
# set :ssh_options, verify_host_key: :secure
append :linked_dirs, "mw-core/uploads"
append :linked_dirs, "mw-core/application/cache"
append :linked_dirs, "mw-core/application/routes"
append :linked_files, "mw-core/application/config/config.php"
append :linked_files, "mw-core/application/config/database.php"
append :linked_files, "mw-core/application/config/site.php"
#append :linked_files, "application/config/email.php"

namespace :deploy do
  desc 'Gulp task'
  task :gulp do
    on roles(:app), in: :sequence, wait: 5 do
      execute("cd '#{release_path}' && sh installer.sh")
    end
  end
end
 
after 'deploy:set_current_revision', 'deploy:gulp'


