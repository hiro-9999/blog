# SLOs matter 
サービスレベルの評価基準「SLO」とは SLO（Service Level Objective
https://pfs.nifcloud.com/navi/tech/slo.htm

「SLO（Service Level Objective）」は、事業者が定義・合意したSLAを履行するために、サーバーやネットワーク、ストレージなどの各領域の稼働率、性能、可用性、セキュリティ、サポートといった項目ごとに、パフォーマンスの目標値を表したものです。

SLA（Service Level Agreement
# SLA、SLO、SLI の比較: 相違点は何か?
https://www.atlassian.com/ja/incident-management/kpis/sla-vs-slo-vs-sli
SLI: サービス レベル指標

SLA は、チームが境界とエラー予算を設定するのに役立ちます。SLO は、作業の優先順位付けに役立ちます。また SLI は、尽きかけているエラー予算を節約するためにすべてのリリースを凍結する必要があるタイミング、およびその抑制を緩和できるタイミングを SRE に伝えます。

### site reliability engineer = SRE

## 97 Things Every SRE Should Know
 turning on TCP_NODELAY for our application, and BOOM. All of the 40 ms delays instantly disappeared. Everything was fixed. I was a wizard.
You can’t fix TCP problems without understanding TCP. I used to think that TCP was really low-level and that I did not need to understand it—which is mostly true! But sometimes in real life, you have a bug, and that bug is because of something in the TCP algorithm. I’ve found that in operations work, a surprising number of these bugs are caused by a low-level compo‐ nent of my system that I previously thought was obscure and suddenly have to learn a lot more about very quickly.
