
<div class="gamification-dashboard bg-midnight-light/20 border border-gold/30 rounded-lg p-4 mb-6">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4">
        <div>
            <h3 class="text-xl font-cinzel font-bold text-gold">Your Progress</h3>
            <p class="text-sand-light text-sm">Keep earning points to level up!</p>
        </div>
        <a href="{{ route('website.leaderboard') }}" class="inline-flex items-center px-3 py-1 bg-gold hover:bg-gold-light text-midnight-dark font-medium rounded-md text-sm mt-2 md:mt-0 transition-colors">
            <span>View Leaderboard</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
    
    <div class="flex flex-col md:flex-row gap-4">
        <!-- Points and Level -->
        <div class="flex-1 bg-midnight-light/30 rounded-lg p-4">
            <div class="flex justify-between items-center mb-2">
                <span class="text-sand-light">Points</span>
                <span class="text-gold font-bold user-points-counter">0</span>
            </div>
            <div class="flex justify-between items-center mb-2">
                <span class="text-sand-light">Level</span>
                <span class="text-gold font-bold user-level">1</span>
            </div>
            <div class="mt-3">
                <div class="text-xs text-sand-light/70 mb-1 flex justify-between">
                    <span>Progress to next level</span>
                    <span class="level-progress-text">0/100</span>
                </div>
                <div class="h-2 bg-midnight-light rounded-full overflow-hidden">
                    <div class="level-progress-bar h-full bg-gold rounded-full" style="width: 0%"></div>
                </div>
            </div>
        </div>
        
        <!-- Recent Activity -->
        <div class="flex-1 bg-midnight-light/30 rounded-lg p-4">
            <h4 class="text-sand-light font-medium mb-2">Recent Activity</h4>
            <div class="space-y-2 recent-activity">
                <div class="text-sand-light/70 text-sm text-center py-2">
                    Your recent activities will appear here.
                </div>
            </div>
        </div>
    </div>
    
    <!-- Achievements Section -->
    <div class="mt-4 bg-midnight-light/30 rounded-lg p-4">
        <h4 class="text-sand-light font-medium mb-2">Your Achievements</h4>
        <div class="achievements-list">
            <div class="text-sand-light/70 text-sm text-center py-4">
                No achievements unlocked yet. Keep going!
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Load user gamification data if user is logged in
    @if(auth()->check())
    fetch('/api/gamification/user-data')
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Update points counter
                const pointsCounters = document.querySelectorAll('.user-points-counter');
                if (pointsCounters.length) {
                    pointsCounters.forEach(counter => {
                        counter.textContent = data.points;
                    });
                }
                
                // Calculate and update level
                const level = Math.floor(data.points / 100) + 1;
                const levelElements = document.querySelectorAll('.user-level');
                if (levelElements.length) {
                    levelElements.forEach(element => {
                        element.textContent = level;
                    });
                }
                
                // Update progress bar
                const progressBars = document.querySelectorAll('.level-progress-bar');
                const progressTexts = document.querySelectorAll('.level-progress-text');
                if (progressBars.length) {
                    const currentLevelPoints = data.points % 100;
                    const progressPercentage = (currentLevelPoints / 100) * 100;
                    
                    progressBars.forEach(bar => {
                        bar.style.width = `${progressPercentage}%`;
                    });
                    
                    progressTexts.forEach(text => {
                        text.textContent = `${currentLevelPoints}/100`;
                    });
                }
                
                // Update achievements list
                const achievementsList = document.querySelector('.achievements-list');
                if (achievementsList && data.achievements && data.achievements.length) {
                    achievementsList.innerHTML = '';
                    
                    data.achievements.forEach(achievement => {
                        const achievementItem = document.createElement('div');
                        achievementItem.className = 'achievement-item flex items-center p-2 border-b border-midnight/20 last:border-0';
                        achievementItem.innerHTML = `
                            <div class="achievement-icon w-8 h-8 bg-gold/20 rounded-full flex items-center justify-center mr-3">
                                <span class="text-gold">🏆</span>
                            </div>
                            <div class="achievement-details flex-1">
                                <h5 class="text-sand-light font-medium">${achievement.name}</h5>
                                <p class="text-sand-light/70 text-xs">${achievement.description}</p>
                            </div>
                            <div class="achievement-points text-gold text-sm">
                                +${achievement.points_awarded}
                            </div>
                        `;
                        achievementsList.appendChild(achievementItem);
                    });
                }
            }
        })
        .catch(error => {
            console.error('Error loading gamification data:', error);
        });
    @endif
});
</script>
