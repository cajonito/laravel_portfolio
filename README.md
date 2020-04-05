# Inumite.com

思わず他人に見て欲しい犬の画像を手に入れた時に投稿、閲覧を可能にするサービスです。

Laravel7にて作成しました。

随時更新中です。

# AWS構成

|サービス|用途|
|---|---|
|Route53|DNSとして|
|ECR|本番環境DockerImageを格納|
|ECS|ECRのイメージを元にDockerをEC2上に構築|
|RDS|データベースサーバーとして|
|ELB|ApplicationLoadBalancerを作成しアプリの入り口に|
|ACM|SSL証明書の作成|
|CloudFormation|ネットワーク構成の作成|

# docker構成 

ucan-lab氏のものを参考にした
https://github.com/ucan-lab/docker-laravel
