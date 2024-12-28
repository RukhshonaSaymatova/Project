FROM gitpod/workspace-full

# Install PHP and Composer
RUN sudo apt-get update && \
    sudo apt-get install -y php-cli php-mbstring unzip curl && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash - && \
    sudo apt-get install -y nodejs
