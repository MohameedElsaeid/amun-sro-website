
<div class="leaderboard-widget bg-midnight-light/30 border border-gold/30 rounded-lg p-4">
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-gold font-cinzel font-bold">Top Players</h3>
        <a href="{{ route('website.leaderboard') }}" class="text-gold hover:text-gold-light text-sm flex items-center">
            View All
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
    
    <div class="leaderboard-widget-content space-y-2">
        <p class="text-center text-sand-light/70 text-sm py-3">Loading leaderboard data...</p>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Load leaderboard data for the widget
    fetch('/api/gamification/leaderboard')
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const leaderboardContent = document.querySelector('.leaderboard-widget-content');
                if (!leaderboardContent) return;
                
                leaderboardContent.innerHTML = '';
                
                if (data.leaderboard.length) {
                    // Only show top 5
                    data.leaderboard.slice(0, 5).forEach((user, index) => {
                        const item = document.createElement('div');
                        item.className = 'leaderboard-item flex items-center justify-between p-2 rounded-md hover:bg-midnight-light/50 transition-colors';
                        
                        // Determine rank style
                        let rankClass = '';
                        if (index === 0) rankClass = 'rank-1';
                        else if (index === 1) rankClass = 'rank-2';
                        else if (index === 2) rankClass = 'rank-3';
                        
                        // Calculate level
                        const level = Math.floor(user.points / 100) + 1;
                        
                        item.innerHTML = `
                            <div class="flex items-center">
                                <span class="w-6 h-6 ${index < 3 ? 'bg-gold/20' : 'bg-midnight-light/50'} rounded-full flex items-center justify-center mr-2 text-sm ${rankClass}">${index + 1}</span>
                                <span class="text-sand-light">${user.StrUserID}</span>
                            </div>
                            <div class="text-sand-light/70 text-sm">${user.points} pts</div>
                        `;
                        
                        leaderboardContent.appendChild(item);
                    });
                } else {
                    leaderboardContent.innerHTML = '<p class="text-center text-sand-light/70 text-sm py-3">No leaderboard data available yet.</p>';
                }
            }
        })
        .catch(error => {
            console.error('Error loading leaderboard widget data:', error);
            const leaderboardContent = document.querySelector('.leaderboard-widget-content');
            if (leaderboardContent) {
                leaderboardContent.innerHTML = '<p class="text-center text-sand-light/70 text-sm py-3">Failed to load leaderboard data.</p>';
            }
        });
});
</script>
