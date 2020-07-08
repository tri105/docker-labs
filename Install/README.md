# Cài đặt Docker

Chọn OS để cài đặt: https://docs.docker.com/get-docker/

## Cài Docker trên Linux/Ubuntu

> Chuyển qua `root` để chạy

```
apt-get remove docker docker-engine docker.io containerd runc

apt-get update

apt-get install apt-transport-https ca-certificates curl gnupg-agent software-properties-common

curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -

add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"

apt-get update

apt-get install docker-ce docker-ce-cli containerd.io

docker run hello-world

```

> Thêm `user` đang dùng vào group docker (để chạy docker mà không cần dùng `sudo`)

```
sudo usermod -aG docker your-user
```

Gỡ cài đặt Docker

```
sudo apt-get purge docker-ce docker-ce-cli containerd.io

sudo rm -rf /var/lib/docker
```
*Tham khảo ở đây: https://docs.docker.com/engine/install/ubuntu/*

## Cài đặt Docker Compose trên Linux/Ubuntu

Tham khảo ở đây: https://docs.docker.com/compose/install/

Chạy lệnh sau

```
sudo curl -L "https://github.com/docker/compose/releases/download/1.26.1/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

sudo chmod +x /usr/local/bin/docker-compose
```

Kiểm tra version

```
docker-compose version
```