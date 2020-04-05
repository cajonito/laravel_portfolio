# laravel-tutorial

# AWS構成

|サービス|用途|
|---|---|
|Route53|DNSとして|
|ECR|本番環境DockerImageを格納|
|ECS|ECRのイメージを元にDockerをEC2上に構築|
|RDS|データベースサーバーとして|
|ELB|ApplicationLoadBalancerを作成しアプリの入り口に|
|CloudFormation|ネットワーク構成の作成|

# docker構成 

ucan-lab氏のものを参考にした
https://github.com/ucan-lab/docker-laravel
